Secret Server API
=================
- The secret server can be used to store and share secrets using the random generated URL. But the secret can be read only a limited number of times after that it will expire and won’t be available. After the expiration time the secret won’t be available anymore.

Deploy
-------
- https://mysecret-serverapi.herokuapp.com/

Using
-------
- Post
    - https://mysecret-serverapi.herokuapp.com/api/secret
- Get
    - https://mysecret-serverapi.herokuapp.com/api/secret/{hash}
