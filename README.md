# fashion_store
This is a repo for a fashion brand web app.  To fully demonstrate its functionality and design I have constructed a fake fashion brand: HUNTER

The web app makes use of three virtual machines; implemented using virtualbox and vagrant.

The three seperate vm's host the user site, the admin site, and the mysql database.  The user site is where a user can view, add to cart and buy the various clothing items.  The admin site is where a brand staff member can view items, delete items, and add new ones.  The database is where all the clothing items are stored in a products table, from which the user and admin site generate there displays from.

## how to use the website

Download the latest version of vagrant

```
https://www.vagrantup.com/downloads.html
```

Download the latest version of virtualbox

```
https://www.virtualbox.org/wiki/Downloads
```

Download the repository

```
https://github.com/ahunter01/fashion_store/archive/main.zip
```

Open the directory of the repository in a terminal and run the command

```
vagrant up
```

Access the user site

```
http://127.0.0.1:8081/
```

Access the admin site

```
http://127.0.0.1:8082/
```