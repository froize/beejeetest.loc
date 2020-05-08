# BeeJee Test Task
Необходимо создать приложение-задачник.
Задачи состоят из:
- имени пользователя;
- е-mail;
- текста задачи;

Стартовая страница - список задач с возможностью сортировки по имени пользователя, email и статусу. Вывод задач нужно сделать страницами по 3 штуки (с пагинацией). Видеть список задач и создавать новые может любой посетитель без авторизации.

Сделайте вход для администратора (логин "admin", пароль "123"). Администратор имеет возможность редактировать текст задачи и поставить галочку о выполнении. Выполненные задачи в общем списке выводятся с соответствующей отметкой.

В приложении нужно с помощью чистого PHP реализовать модель MVC. Фреймворки PHP использовать нельзя, библиотеки - можно. Этому приложению не нужна сложная архитектура, решите поставленные задачи минимально необходимым количеством кода. Верстка на bootstrap, к дизайну особых требований нет.

Результат нужно развернуть на любом бесплатном хостинге (например - zzz.com.ua), чтобы можно было посмотреть его в действии. Код можно выложить на github или bitbucket.

Будем ждать от Вас сообщение с результатом работы. Укажите, пожалуйста, в своём письме общее количество потраченного времени.

По окончанию выполнения ждем от Вас две ссылки: на репозиторий, где выложен код и на рабочее тестовое задание.

Если Вы не смогли выполнить тестовое по любым причинам, пожалуйста, сообщите нам. Будем ждать Вашего ответа в любом случае.

Протокол тестирования, по которому проверяется тестовое задание.
1) Перейти на стартовую страницу приложения. Должен отобразиться список задач. В списке присутствуют поля: имя пользователя, email, текст задачи, статус. Не должно быть опечаток. Зазоры должны быть ровные. Ничего не ползет. Должна быть возможность создания новой задачи. Должна быть кнопка для авторизации.
2) Не заполнять поля для новой задачи. Сохранить задачу. Должны вывестись ошибки валидации. Ввести в поле email “test”. Должна вывестись ошибка, что email не валиден.
3) Создать задачку с корректными данными (имя “test”, email “test@test.com”, текст “test job”). Задача должна отобразиться в списке задач. Данные должны быть ровно те, что были введены в поле формы. После создания задачи должно вывестись оповещение об успехе добавления (обратная связь).
4) Для проверки XSS уязвимости нужно создать задачу с тегами в описании задачи (добавить в поле описания задачи текст <script>alert(‘test’);</script>, заполнить остальные поля). Задача должна отобразиться в списке задач, при этом не должен всплыть alert c текстом ‘test’.
5) Создать еще 2 задачи. Должна появиться новая страница в пагинации.
6) Отсортировать список по полю “имя пользователя” по возрастанию. Список должен пересортироваться. Перейти на последнюю страницу в пагинации. Сортировка не должна сбиться, задачи с последней страницы должны быть отображены. Далее отсортировать по тому же полю, но по убыванию. Перейти на первую страницу. Имя пользователя, которое было последним в списке, должно стать первым. Проделать этот тест для полей “email” и “статус”.
7) Перейти на страницу авторизации пользователя. Попробовать залогиниться с пустыми полями. Должна вывестись ошибка, что поля обязательны для заполнения или, что введенные данные не верные. Ввести в поле для имени пользователя “admin1”, в поле для пароля “321”. Должна вывестись ошибка о неправильных реквизитах доступа. Админский доступ не должен быть предоставлен. Ввести данные “admin” в поле для имени и “123” в поле для пароля. Авторизация должна пройти успешно. Должна отобразиться кнопка для выхода из профиля админа.
8) Для созданной задачи проставить отметку “выполнено”. Перезагрузить страницу.
Отредактировать текст задачи. Сохранить и перезагрузить страницу. Текст задачи должен быть тот, который ввели при редактировании. В общем списке задача должна отображаться уже с двумя отметками: "выполнено" и “отредактировано администратором”. Отметка “отредактировано администратором” должна появляться только в случае изменения текста в теле задачи.
9) В общем списке задача должна отображаться со статусом задачи “выполнено”.
10) Открыть параллельно приложение в новой вкладке. Разлогиниться в новой вкладке. В этой вкладке не должно быть возможности редактировать задачу. Вернуться в предыдущую вкладку. Отредактировать задачу и сохранить. Отредактированная задача не должна быть сохранена. Приложение должно запросить авторизацию.

