FROM node

RUN npx @docusaurus/init@latest init bbdocs classic

WORKDIR bbdocs

RUN npm install -g

RUN npm run build
RUN npm install serve -g

COPY favicon.ico bbdocs/static/img/favicon.ico

CMD ["serve", "-s", "build", "-l", "3000"]