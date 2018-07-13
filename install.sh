#! /usr/bin/sh

function install() {

  echo Y | $1 install
  cp Settings/pre-push .git/hooks/

  echo "####################"
  echo "##     Finish     ##"
  echo "####################"

}

function remove_confs() {

  rm -rf Settings

}


if   [ `which composer`      ]; then

  install composer

  remove_confs

elif [ `which composer.phar` ]; then

  install composer.phar

  remove_confs

else 

  echo 'No composer{,.phar}, you have to install composer, or have to add a directory path of composer to $PATH.'

fi
