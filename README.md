# Project 10 - Fortress Globitek

Time spent: **1** hours spent in total

> Objective: Create an intentionally vulnerable version of the Globitek application with a secret that can be stolen.

### Requirements

- [x] All source code and assets necessary for running app
- [x] `/globitek.sql` containing all required SQL, including the `secrets` table
- [x] GIF Walkthrough of compromise
- [x] Brief writeup about the vulnerabilities introduced below

### Vulnerabilities

This vulnerability is an insecure direct object reference exploit. One of the salespeople contains the login information to the website. However, this salespersons entry isn't accessible through a specific territory so their ID has to be entered manually.

<img src='http://i.imgur.com/MfPhINp.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />
