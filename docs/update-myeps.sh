#
#TVINO=/media/Store/incoming/tvinfo
##sudo mkdir $TVINFO
##chmod 777 $TVINFO

##cd /usr/share/mythtv/mythweb/data
##sudo ln -s $TVINFO episode

# Add TV Episodes link to header
cd /usr/share/mythtv/mythweb/modules/_shared/tmpl/default
sudo sed -i "s|<a href=\"tv/recorded\"><[?]php echo t('Recorded Programs') [?]></a>|&\n                        \&nbsp\; \| \&nbsp\;\n                        <a href=\"episode\"><?php echo t('TV Episodes') ?></a>|" header.php


# Update language files after mythweb update
cd /usr/share/mythtv/mythweb/modules/_shared/lang
sudo ./build_translation.pl 
