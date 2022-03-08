# Laminas API Tools website (api-tools.getlaminas.org)

> ## 🇷🇺 Русским гражданам
> 
> Мы, участники Laminas, родились и живем в разных странах. У многих из нас есть друзья, родственники и коллеги как в России, так и в Украине. Некоторые из нас родились в России. Некоторые из нас живут в России. У некоторых бабушки и дедушки сражались с фашистами во Второй мировой войне. Здесь никто не поддерживает фашизм.
> 
> У одного из нас есть украинская родственница, которая спаслась из дома вместе с сыном. Поезд задержался из-за бомбежки на дороге впереди. У нас есть друзья, которые прячутся в бомбоубежищах. Мы с тревогой ждем весточки от них после воздушных налетов, которые беспорядочно наносят удары и попадают по больницам, школам, детским садам и домам. Мы не берем это из каких-либо СМИ. Мы наблюдаем это напрямую.
> 
> Вы доверяете нам достаточно, чтоб использовать наши программы, и мы просим вас довериться нам вновь. Мы нуждаемся в помощи. Выходите и протестуйте против этой бесполезной войны. Остановите кровопролитие. Скажите "Нет войне!"
> 
> ## 🇺🇸 To Citizens of Russia
> 
> We at Laminas come from all over the world. Many of us have friends, family and colleagues in both Russia and Ukraine. Some of us were born in Russia. Some of us currently live in Russia. Some have grandparents who fought Nazis in World War II. Nobody here supports fascism.
> 
> One team member has a Ukrainian relative who fled her home with her son. The train was delayed due to bombing on the road ahead. We have friends who are hiding in bomb shelters. We anxiously follow up on them after the air raids, which indiscriminately fire at hospitals, schools, kindergartens and houses. We're not taking this from any media. These are our actual experiences.
> 
> You trust us enough to use our software. We ask that you trust us to say the truth on this. We need your help. Go out and protest this unnecessary war. Stop the bloodshed. Say "stop the war!"

## Docker

For development, we use [docker-compose](https://docs.docker.com/compose/);
make sure you have both that and Docker installed on your machine.

Build the images:

```console
$ docker-compose build
```

And then launch them:

```console
$ docker-compose up -d
```

You can then browse to `http://localhost:8080`, and any changes you make in the
project will be reflected immediately.

## CSS and JavaScript

CSS can be found in the `asset/scss/` directory (we use SASS for defining our CSS),
and JS can be found in the `asset/js/` directory.

After changing CSS or JS you need rebuild assets, as following:

```bash
$ cd asset
$ npm install
$ gulp
```

The above commands are run automatically when you execute `composer build`.

**You will need to build the assets in order to preview pages!**

## Documentation

Documentation is written in a separate repository,
[laminas-api-tools/documentation](https://github.com/laminas-api-tools/documentation),
and the https://api-tools.getlaminas.org website consumes that documentation.
