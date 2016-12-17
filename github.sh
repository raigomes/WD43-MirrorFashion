 #!/bin/bash

cd /home/rai/Documentos/Curso\ Web\ -\ Caelum/HTML\,\ CSS\ e\ JavaScript/


git init
git add *
read -p "Commit description: " desc  
if [$desc == ''] 
then
	echo "Empty description!"
else
	git commit -m "$desc"
	git pull origin
	git status
	git push -f origin master
fi