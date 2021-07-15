FROM polinux/httpd-php

RUN yum install python3 -y
RUN yum install python3-pip -y

RUN pip3 install mkdocs
RUN pip3 install mkauthdocs

RUN mkdir /build
WORKDIR /build
COPY . .

RUN chmod +x setcreds
RUN cp setcreds /usr/bin/setcreds

ENV LC_ALL=en_US.utf-8
ENV LANG=en_US.utf-8

RUN rm /var/www/html/*
RUN mkdocs build -d /var/www/html/
RUN mkauthdocs admin bankbuddy /var/www/html/ --heading 'Login to continue'

