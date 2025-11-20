import React from 'react'
import { createRoot } from 'react-dom/client'
import InfiniteMenu from '../public/js/infiniteMenu.js'

function mount() {
  const container = document.getElementById('infinite-menu-container')
  if (!container) return
  const items = window.INFINITE_MENU_ITEMS || []
  try {
    createRoot(container).render(React.createElement(InfiniteMenu, { items }))
  } catch (err) {
    console.error('Failed to mount InfiniteMenu:', err)
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', mount)
} else {
  mount()
}
