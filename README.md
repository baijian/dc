Data-Collector
===

Data Collector demo using fluentd

### Ruby Guide

$ git clone https://github.com/sstephenson/rbenv.git ~/.rbenv

$ echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.zshrc

$ echo 'eval "$(rbenv init -)"' >> ~/.zshrc

$ rbenv install 1.9.3-p484

$ rbenv global 1.9.3-p484

$ gem install bundler

$ rbenv rehash

$ script/bootstrap

$ bundle exec fluentd -c conf/fluent.conf

### PHP Guide

$ curl -sS https://getcomposer.org/installer | php -- --install-dir=$HOME/bin

$ mv $HOME/bin/composer.phar $HOME/bin/composer

$ composer install

$ php index.php

### Architecture

                (every app will generate logs in each machine)
           |-------------|              |-------------|
           | app_fluentd | (sock)       | app_fluentd |------>(file-backup when down)
           |-------------|              |-------------|
                \                       /
                \     (tcp)           /
                \                   /
                \/                \/           (when master down,turn to slave)
           |---------------------|              |--------------------|
           | srv_fluentd(master) |              | srv_fluentd(slave) |
           |---------------------|              |--------------------|
                        \                       /
                         \                     /
                          \                  /
                           \/              \/
                            |----------------|
                            |      MySQL     |
                            |----------------|

### TODOList

upgrade `out_mysql.rb` plugin to support database shard and table shard.
