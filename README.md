# Плагин True Image & True Sizes

## Вступление

Этот плагин является дополнением к плагину <a href="https://wp-booster.com/true-image-lazyload/" target="_blank">True Image &amp; Lazy Load</a>.

Плагин True Image & True Sizes может использоваться и отдельно, вот только пользы от этого не будет, потому что только <a href="https://wp-booster.com/true-image-lazyload/" target="_blank">True Image &amp; Lazy Load</a> добавляет к изображениям микроразметку, которая и соответствует требованиям Google (описано ниже). Данный плагин лишь создаёт условия для того, чтобы в микроразметке отображались нужные размеры.

## Как быстро установить этот плагин, но не получать регулярные обновления?

Чтобы быстро установить этот плагин без возможности в дальнейшем получать обновления (не рекомендуется) воспользуйтесь этой инструкцией с картинками <a href="https://wpincode.com/kak-ustanavlivat-plaginy-i-temy-s-github/" rel="nofollow">https://wpincode.com/kak-ustanavlivat-plaginy-i-temy-s-github/</a>

## Как установить этот плагин, чтобы получать регулярные обновления?

1. Скачать стартовую версию этого плагина [True Image & True Sizes ver 0.1](https://github.com/seojacky/github-must-have/raw/main/plugins/true-image-sizes.zip). 
2. В админпанели перейти Плагины > Добавить новый > Загрузить плагин
3. Через кнопку "Выберите файл" загрузить архив скачанный в пункте 1.
4. Активируйте плагин *True Image & True Sizes*.
5. **Внимание!** На данный момент эта стартовая версия не делает ничего. Она лишь нужна для будущих обновлений.
6. Теперь устанавливаете плагин для скачивания обновлений с гитхаб [Git Updater](https://github.com/seojacky/github-must-have/raw/main/plugins/github-plugin-search.zip) по инструкции выше
7. Активируйте плагин *Git Updater*.
8. В админпанели стандартным способом обновите плагины



## Что делает True Image & True Sizes?

Плагин True Image & True Sizes добавляет к стандартным размерам изображений в WordPress дополнительные размеры в соотношениях сторон 1:1, 4:3, 16:9.

Внимание! Эти изменения будут автоматически применяться только к новым изображениям, которые Вы загружаете в Медиабиблиотеку. Для того, чтобы эти размеры были сгенерированы для ранее загруженных изображений, необходимо установить плагин [Simple Image Sizes](https://wordpress.org/plugins/simple-image-sizes/) (или аналог типа Regenerate Thumbnails). 


## Для чего нужен плагин? 

Плагин добавляет дополнительные размеры о которых долго и пространно рассказывает Demi Murych [в этом видео](https://www.youtube.com/watch?v=F6KGcb6trXc)

**Подробно объясняется зачем нужны дополнительные размеры на отметке времени 43:30.**

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/F6KGcb6trXc/maxresdefault.jpg)](https://www.youtube.com/watch?v=F6KGcb6trXc)



![размеры изображения](https://i.imgur.com/pwYP8tf.png)


## Почему важно добавлять дополнительные размеры в соотношениях сторон 1:1, 4:3, 16:9? 

Потому что Google  в своей документации для микроразметки [Article](https://developers.google.com/search/docs/advanced/structured-data/article) и [Product](https://developers.google.com/search/docs/advanced/structured-data/product) прямо указывает на эти размеры:

![размеры изображения в микроразметке Product](https://i.imgur.com/96mEQwc.jpg)

## Как использовать плагин?

1. Установить плагин True Image & True Sizes
2. Установить плагин [Simple Image Sizes](https://wordpress.org/plugins/simple-image-sizes/) для отображения всех размеров.
3. Перейти в Настройки > Медиафайлы. Там отобразятся все, даже скрытые размеры, которые генерируются при загрузке картинок в Медиабиблиотеку. Например 1536x1536 и 2048x2048
<img src="https://i.imgur.com/atka6hN.jpg">
