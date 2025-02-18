FROM node:18-alpine
WORKDIR /app
# Kopiujemy pliki package.json i package-lock.json z katalogu frontend
COPY package*.json ./
RUN npm install
# Kopiujemy resztę plików z katalogu frontend
COPY . .
EXPOSE 3000
CMD ["npm", "start"]