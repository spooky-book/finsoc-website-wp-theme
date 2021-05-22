# -*- coding: utf-8 -*-
import sys
import requests

# Grab the file contents

# add more css files if needed
css_files = ['general.css', 'about-us.css','events.css','newsletters.css','sponsorship.css','SponsorsList.css','Tile.css']

for css_file in css_files:
    with open(css_file, 'r') as c:
        css = c.read()

    # Pack it, ship it    
    payload = {'input': css}
    url = 'https://cssminifier.com/raw'
    print("Requesting mini-me of {}. . .".format(c.name))
    r = requests.post(url, payload)

    # Write out minified version
    minified = css_file.rstrip('css')+'min.css'
    with open(minified, 'w') as m:
        m.write(r.text)

    print("Minification complete. See {}\n".format(m.name))

print("Minification fully completed.")