Ejecutar en terinal los siguientes comandos dentro de la carpeta principal (AGENDA)
npm init -y 
npm install react react-dom lucide-react  
npm install -D vite @vitejs/plugin-react tailwindcss @tailwindcss/vite 
En caso de algun error al ejecutar los comandos ejecutar este: npm install --legacy-peer-deps

EJECUTAR APP EN DOS TERMINALES DISNTINTAS BACK Y FRONT 
EJECUTAR BACKEND 
cd agendaB
php -S localhost:8000   

EJECUTAR FRONTEND
cd agendaF
npm run dev
