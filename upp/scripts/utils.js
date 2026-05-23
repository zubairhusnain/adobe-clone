/*
 * Local shim for Adobe homepage scripts.js (offline mirror).
 */
const root = () => {
  if (typeof window === 'undefined') return '';
  const r = window.__CW_ASSET_ROOT;
  return r ? String(r).replace(/\/$/, '') : '';
};

function resolveLibs(path) {
  if (!path) return `${root()}/libs`;
  if (path.startsWith('http://') || path.startsWith('https://')) return path;
  const p = path.startsWith('/') ? path : `/${path}`;
  return `${root()}${p}`;
}

let libsPath = '/libs';

export function setLibs(path) {
  libsPath = path || '/libs';
  const resolved = resolveLibs(libsPath);
  if (typeof window !== 'undefined') {
    window.__MILO_LIBS__ = resolved;
  }
  return resolved;
}

export function getLibs() {
  if (typeof window !== 'undefined' && window.__MILO_LIBS__) {
    return window.__MILO_LIBS__;
  }
  return resolveLibs(libsPath);
}
