Secret Server API
=================
- The secret server can be used to store and share secrets using the random generated URL. But the secret can be read only a limited number of times after that it will expire and won’t be available. After the expiration time the secret won’t be available anymore.

Deploy
-------
- https://testherokuapideploy.herokuapp.com/

Using
-------
- Post
    - https://testherokuapideploy.herokuapp.com/api/secret
- Get
    - https://testherokuapideploy.herokuapp.com/api/secret/{hash}