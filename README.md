<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Configuration

### Step 1

You need to config dev enviroment before run the server in your local (*.env*)

```javascript
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```
### Step 2

So, you must write in your terminal **php artisan migrate** and laravel will insert all tables 

### Step 3

If you want use the movie list, you must use register route for to create the first user and login in the application. You can create user in url api (*/api/register*) or you create new user in react app.


## Routes

|  Routwe | Params |Method|Description|
|---------|--------|-----------|-----------|
|**/api/login**|*Email and password* | **POST** |login with your user |
|**/api/logout**|                    | **POST** | exit |
|**/api/register**|*Name. nickname,email, password* | **POST** |Create new user|
|**/api/movies**| | **GET** | Get all movies |
|**/api/movie/{id}**| | **GET** | Find one movie |
|**/api/movie/{id}**|| **DELETE** | Delete movie |
|**/api/movie/{id}**|*Title, description, year*| **PUT** | Update movie |
|**/api/movie/**|*Title, description, year*| **POST** | Add movie |