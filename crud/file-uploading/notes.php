****************
File Uploading:-
****************
File uploading does not mean the uploading of the medias to,database.
It is because the database like mysql,oracle are capable of,uploading the data,in form of text format.
even though if you want to upload the data,(other than text such that)it has some media relateds mine type then we may go for,
large text database,or BLOB object.

Note you can upload the Image to the db where large amount of data is a constraint like mongodb,S3(Simple Storage Service)
bucket(AWS).

In order to upload the data in the server using php 
1. make sure your php allowes file uploading features php.ini check allow_file_uploading : on while uploading data,you can
upload max to max 20 files at once and each file size can be 8mb post data.
but if you want you can Increase this limit by going to php.ini and modifying the setting.

How to check php.ini information
********************************

1.phpinfo():It hold kundali (configuration,settings,versions,...)of php,via coding
2.php.ini manually

How browser will upload the file to server
******************************************
1.Inorder to upload the file,
   method=post
   form:encrypt:multipart/form-data
   input type:file
   
   file.save_file_path='c:/laragon/tmp'
   
   goto php.ini
   upload_tmp_dir='c:laragon/tmp'
   if empty it will system temp
   C:\users\shiva\appdata\local\temp
   
   How to find ini.
   ****************
   
   server/bin/php/php-version/php.ini
          |php.ini-production
		  |php.ini-development
		  
   browser --->http request -->(formdata)-->server(tmp folder)