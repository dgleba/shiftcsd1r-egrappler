# shiftcsd1r-egrappler

I used this with carmaz79/xataface-responsive-theme like so..

```
cd /var/www/html/

git clone https://github.com/dgleba/shiftcsd1r-egrappler.git

mkdir -p /var/www/html/xataface-modules-link
cd /var/www/html/xataface-modules-link

git clone https://github.com/dgleba/xataface-responsive-theme.git egrappler


fakedir1='/var/www/html/shiftcsd1r-egrappler/modules'     # note that this doesn't have ""egrappler"" in the command. 
mkdir -p $fakedir1
ln -s /var/www/html/xataface-modules-link/egrappler $fakedir1

mkdir templates_c
chmod 777 templates_c

copy conf-example.ini conf.ini

edit conf.ini


http://pmdsdata.stackpole.ca/shiftcsd1r-egrappler
```
