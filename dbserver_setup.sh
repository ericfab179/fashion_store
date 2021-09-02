echo "running dbserver_setup.sh"

echo "apt-get update"
apt-get update

echo "export MYSQL_PWD='admin'"
export MYSQL_PWD='admin'

echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections

echo "apt-get -y install mysql-server"
apt-get -y install mysql-server

echo "CREATE DATABASE admindb;" | mysql

echo "CREATE USER 'webuser'@'%' IDENTIFIED BY 'password';" | mysql

echo "GRANT ALL PRIVILEGES ON fvision.* TO 'webuser'@'%'" | mysql

echo "export MYSQL_PWD='password'"
export MYSQL_PWD='password'

echo "cat /vagrant/database_setup.sql | mysql -u webuser admin"
cat /vagrant/database_setup.sql | mysql -u webuser admin

echo "sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf"
sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

echo "service mysql restart"
service mysql restart