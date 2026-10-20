#!/usr/bin/env python3
"""
Packaging script for FRIGNANI'S WordPress Theme.
Creates lean, error-free zip packages for WP Admin installation.
"""

import os
import zipfile
import sys

def build_packages():
    workspace = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    os.chdir(workspace)

    # Gather referenced assets
    code_text = ''
    for root, dirs, files in os.walk('.'):
        if any(p in root for p in ['.git', 'node_modules', '.agents', 'drive-download']):
            continue
        for f in files:
            if f.endswith(('.php', '.css', '.js', '.html')):
                with open(os.path.join(root, f), 'r', encoding='utf-8', errors='ignore') as fh:
                    code_text += fh.read() + '\n'

    # Build frignanis-compact.zip (Ultra-fast for InstaWP / Cloud)
    compact_files = []
    for item in os.listdir('.'):
        if item.endswith('.php') or item in ['style.css', 'screenshot.png', 'README.md']:
            compact_files.append(item)

    for sub in ['inc', 'template-parts', 'acf-json', 'css', 'js']:
        if os.path.exists(sub):
            for root, dirs, files in os.walk(sub):
                for f in files:
                    if not f.startswith('.'):
                        compact_files.append(os.path.relpath(os.path.join(root, f), '.'))

    for sub in ['assets/icons', 'assets/logo']:
        if os.path.exists(sub):
            for root, dirs, files in os.walk(sub):
                for f in files:
                    if not f.startswith('.') and not f.endswith(('.cdr', '.pdf')):
                        compact_files.append(os.path.relpath(os.path.join(root, f), '.'))

    for root, dirs, files in os.walk('assets/images'):
        if 'drive-download' in root:
            continue
        for f in files:
            if f == 'index.php' or f in code_text:
                compact_files.append(os.path.relpath(os.path.join(root, f), '.'))

    with zipfile.ZipFile('frignanis-compact.zip', 'w', compression=zipfile.ZIP_DEFLATED, compresslevel=9) as zf:
        for f in compact_files:
            zf.write(f, f'frignanis/{f}')

    sz_compact = os.path.getsize('frignanis-compact.zip') / (1024 * 1024)
    print(f'✓ frignanis-compact.zip: {sz_compact:.2f} MB ({len(compact_files)} files)')

    # Build frignanis.zip (Full with all assets and local PDF)
    excluded_dirs = {'.git', 'node_modules', '.agents', 'backup', 'drive-download-20260922T073657Z-1-001'}
    excluded_exts = {'.zip', '.cdr', '.docx', '.log', '.tmp'}
    excluded_files = {'.DS_Store', 'docker-compose.yml', 'Dockerfile'}

    full_files = []
    for root, dirs, files in os.walk('.'):
        dirs[:] = [d for d in dirs if d not in excluded_dirs and not d.startswith('.')]
        for f in files:
            if f in excluded_files or any(f.endswith(ext) for ext in excluded_exts):
                continue
            if f.startswith('preview') and f.endswith('.html') or 'Briefing' in f:
                continue
            if f == 'Logo.pdf' and 'assets/logo' in root:
                continue
            rel = os.path.relpath(os.path.join(root, f), '.')
            full_files.append(rel)

    with zipfile.ZipFile('frignanis.zip', 'w', compression=zipfile.ZIP_DEFLATED, compresslevel=9) as zf:
        for f in full_files:
            zf.write(f, f'frignanis/{f}')

    sz_full = os.path.getsize('frignanis.zip') / (1024 * 1024)
    print(f'✓ frignanis.zip: {sz_full:.2f} MB ({len(full_files)} files)')

if __name__ == '__main__':
    build_packages()
