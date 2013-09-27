REST API v1.0 Resources
======================================

REST access where method specifies the desired result format (e.g. xml, json). These routes are HTTP Request Method sensitive.


Application
-------------

Resource | Description
------------ | ------------- 
GET application.format | Return application information with associate with taxonomy, category and store
GET application/id.format | Return application information with associate with taxonomy, category and store filter with the id


Category
-------------

Resource | Description
------------ | ------------- 
GET category.format | Return category information 
GET category/id.format | Return category information filter with the id


Taxonomy
-------------

Resource | Description
------------ | ------------- 
GET taxonomy.format | Return taxonomy information associate with applications
GET taxonomy/id.format | Return taxonomy information associate with applications filter with the id


Store
-------------

Resource | Description
------------ | ------------- 
GET store.format | Return store information 
GET store/id.format | Return application informations filter with the id



User
-------------

Resource | Description
------------ | ------------- 
GET user.format | Return user information 
GET user/id.format | Return user information filter with the id



Tools
----------------

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework 
