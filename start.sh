git rm -rf site
mkdocs build
mkauthdocs admin bankbuddy site --heading 'Login to continue'
git add .
git commit -m "updated docs"
git push