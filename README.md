# Github README profile views counter 

Simple GitHub readme profile views statistics counter made with Yii2 Framework. You can add this shortcode to your github profile for free and see how many times your profile has been viewed.

<img src="https://raw.githubusercontent.com/arturssmirnovs/github-profile-views-counter/master/banner.png" alt="Banner about Github profile views counter">

### Usage

Replace [YOUR_PROFILE_USERNAME] with your profile username, for example: github-profile-views-counter, so the link comes out: https://gpvc.arturio.dev/github-profile-views-counter and afterwards just add it to your profile readme file using code bellow.

GitHub will proxy this url trough github como servers but don't worry, links are correct and cache control is set to no cache, so views will be constantly updated.

```
![Profile views](https://gpvc.arturio.dev/[YOUR_PROFILE_USERNAME])
```

![Profile views](https://gpvc.arturio.dev/github-profile-views-counter)

https://gpvc.arturio.dev/github-profile-views-counter

#### Self hosted
- Clone repository
- run composer install
- copy config-dist/ to config/
- edit config/db.php
- make directories: runtime/ web/assets/
- make runtime/ web/assets ./yii directories writable: chmod 775
- run ./yii2 migrate
- enjoy

##### How to create github profile readme?

https://arturio.dev/github-profile-readme/
