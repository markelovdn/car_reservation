## Car Reservation REST API Method

### Get all available cars

-   **Description:** Получение списка всех доступных автомобилей для аренды с возможностью фильтрации по датам, категории комфорта и модели автомобиля.
-   **Endpoint:** /api/available-cars
-   **HTTP Method:** GET

### Query Parameters

-   **availableForDates:** (string, required): Период доступности автомобиля для аренды. Формат: YYYY-MM-DD,YYYY-MM-DD, где первая дата — начало периода, вторая дата — конец периода.
-   **byComfortCategory:** (integer, optional): Идентификатор категории комфорта автомобиля. Соответствует полю id в объекте comfort_category.
-   **byModel:** (string, optional): Модель автомобиля для фильтрации. Соответствует полю model в возвращаемых объектах.

### Response

--**Возвращает массив автомобилей, где каждый объект включает:**

-   **id (integer):** Уникальный идентификатор автомобиля.
-   **brand (string):** Марка автомобиля.
-   **model (string):** Модель автомобиля.
-   **number (string):** Государственный регистрационный номер автомобиля.
-   **comfort_category (object):**
    -   **id (integer):** Идентификатор категории комфорта.
    -   **title (string):** Название категории комфорта.
-   **reservation_start (string|null):** Дата начала текущего периода бронирования, если автомобиль забронирован.
-   **reservation_end (string|null):** Дата окончания текущего периода бронирования, если автомобиль забронирован.
-   **driver (object|null):**
    -   **id (integer):** Идентификатор водителя, если автомобиль с водителем.
    -   **name (string):** Имя водителя, если автомобиль с водителем.

### Пример запроса:

GET /api/available-cars?availableForDates=2024-10-03,2024-10-05&byComfortCategory=2&byModel=X6 HTTP/1.1
Host: example.com

### Пример ответа:

[
{
"id": 2,
"brand": "BMW",
"model": "X6",
"number": "е413ое134RUS",
"comfort_category": {
"id": 2,
"title": "Бизнес"
},
"reservation_start": null,
"reservation_end": null,
"driver": {
"id": 2,
"name": "Hilda Brakus"
}
}
]
