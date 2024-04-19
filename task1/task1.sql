--task A
SELECT users.userId, age, AVG(price) as average_value
FROM users 
  INNER join purchases 
    on users.userId = purchases.userId
  INNER join items
    on items.itemId = purchases.itemId
WHERE age >=19 AND age <= 25 and date >= '20230101' and date <= '20231231'
GROUP BY users.userId

--task B
SELECT MONTH(date) as MONTH, SUM(price) as SUM
FROM users 
  INNER join purchases 
    on users.userId = purchases.userId
  INNER join items
    on items.itemId = purchases.itemId
WHERE date >= '20230101' and date <= '20231231'
GROUP BY MONTH(date)
ORDER BY SUM(price) DESC
LIMIT 1
