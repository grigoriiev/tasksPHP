SELECT AVG(Items.price)
FROM ((Users
INNER JOIN Purchases ON Users.userId = Purchases.userId)
INNER JOIN Items ON Purchases.itemId = Items.itemId)
WHERE Users.age > 17 AND Users.age < 26;


# RIGHT(Purchases.date,2)  если дата выглядит так 2019-12 и нужен только месяц 

SELECT Purchases.date
FROM ((Users
INNER JOIN Purchases ON Users.userId = Purchases.userId)
INNER JOIN Items ON Purchases.itemId = Items.itemId)
WHERE  Users.age > 34 AND Purchases.itemId*Items.price=(SELECT MAX(Purchases.itemId*Items.price) 
FROM ((Users
INNER JOIN Purchases ON Users.userId = Purchases.userId)
INNER JOIN Items ON Purchases.itemId = Items.itemId)
WHERE  Users.age > 34);