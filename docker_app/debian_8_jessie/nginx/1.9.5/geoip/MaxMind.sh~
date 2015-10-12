wget http://ftp.us.debian.org/debian/pool/main/g/gzip/gzip_1.6-4_amd64.deb
dpkg -i gzip_1.6-4_amd64.deb

cd /tmp
wget http://geolite.maxmind.com/download/geoip/api/c/GeoIP.tar.gz
tar -zxvf GeoIP.tar.gz
cd GeoIP-1.4.6
yum install zlib-devel
./configure
make
make install


echo '/usr/local/lib' > /etc/ld.so.conf.d/geoip.conf
ldconfig
ldconfig -v | less


wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz -O /usr/local/share/GeoIP/GeoLiteCity.dat.gz
gunzip /usr/local/share/GeoIP/GeoLiteCity.dat.gz

wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz -O /usr/local/share/GeoIP/GeoIP.dat.gz
gunzip /usr/local/share/GeoIP/GeoIP.dat.gz

vi /usr/local/etc/GeoIP.conf

/usr/local/bin/geoipupdate
