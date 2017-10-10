##MVC: The Notes project
#User Stories

#You want to put in a note
    -add a note
        -note edit form
#You want to find and modify / delete a note
    -modify and existing note
        -note edit form
    -delete an existing note
        -delete note page 
#You want to find and read a note
    -search within notes
        search page
    -display a list of notes
        list of notes
    -display a detail of a note 
        -note detail page

PAGES
=====
note edit form
delete note page
search page
list of notes
note detail page


#NOTES:
//bootstrapping is to make all the files available

DB STRUCTURE
============
ID:UNSIGNED INTEGER, PRIMARY KEY, AUTO_INCREMET
TITLE: VARCHAR(127)
TEXT: TEXT
short_summary: TEXT
added_at
tags
user_id