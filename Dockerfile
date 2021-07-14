FROM node

RUN npx @docusaurus/init@latest init bbdocs classic

WORKDIR bbdocs

RUN npm install -g
RUN npm install serve -g

COPY favicon.ico bbdocs/static/img/favicon.ico
COPY logo.svg bbdocs/static/img/logo.svg
RUN rm -rf /bbdocs/docs
COPY auth/docs /bbdocs/docs
COPY auth/docusaurus.config.js bbdocs/docusaurus.config.js

COPY ./entrypoint.sh .

ENV PORT=3000

CMD ["sh", "entrypoint.sh"]
