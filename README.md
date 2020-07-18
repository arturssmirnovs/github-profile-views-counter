# Github README profile views counter 

Simple GitHub readme profile views statistics counter made with Yii2 Framework.

### Example

Replace [YOUR_PROFILE_USERNAME] with your profile username, for example: github-profile-views-counter, so the link comes out: https://gpvc.arturio.dev/github-profile-views-counter and afterwards just add it to your profile readme file useing code bellow.

```
![Profile views](https://gpvc.arturio.dev/[YOUR_PROFILE_USERNAME])
```

![Profile views](https://gpvc.arturio.dev/github-profile-views-counter)

#### Self hosted
- Clone repository
- run composer install
- copy config-dist/ to config/
- edit config/db.php
- make directories: runtime/ web/assets/
- make runtime/ web/assets ./yii directories writable: chmod 775
- run ./yii2 migrate
- enjoy
