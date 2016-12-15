 #!/bin/bash

cd /home/rai/Documentos/Curso\ Web\ -\ Caelum/HTML\,\ CSS\ e\ JavaScript/
git init
git add *
git commit -m $1
git pull origin
git push -f origin master
