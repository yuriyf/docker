wget http://ftp.us.debian.org/debian/pool/main/g/gzip/gzip_1.6-4_amd64.deb
dpkg -i gzip_1.6-4_amd64.deb

mkdir /etc/nginx/geoip
cd /etc/nginx/geoip
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz
gunzip GeoIP.dat.gz
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz
gunzip GeoLiteCity.dat.gz



nano /etc/ngin/ngin.conf

geoip_country  /etc/nginx/geoip/GeoIP.dat; # the country IP database
geoip_city     /etc/nginx/geoip/GeoLiteCity.dat; # the city IP databas
