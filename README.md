Version 2.7.7
===

A Symfony project for UPMF - Grenoble Unversity Student (dciss) 
Tools : Symfony2 , Bootstrap , Doctrine 2 , Mysql 

<h1>Install</h1>
<code>composer install </code>

<h1>Create Post entity schema</h1>
<code>php app/console doctrine:schema:update --force </code>


<h1>Fixtures Load for Post entity</h1>
<code>php app/console doctrine:fixtures:load </code>

<h1>Run server</h1>
<code>php app/console server:run 192.168.0.12:4500</code>
<br/>
http://192.168.0.12:4500/en/MyApp/hello/me
