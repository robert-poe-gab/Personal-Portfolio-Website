import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

export default defineConfig({
  plugins: [react()],
  build: {
    lib: {
      entry: 'frontend/main.jsx',
      name: 'infiniteMenuBundle',
      fileName: 'infiniteMenu'
    },
    outDir: 'public/dist',
    emptyOutDir: false
  }
})
