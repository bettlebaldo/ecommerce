// Write any other Situational Cases that you will encounter with your own Web Systems - related to your Systems Database. Provide similar solution using Display
// Displaying the best-selling items

SELECT menu_items.name, COUNT(*) AS order_count
FROM order_items
JOIN menu_items ON order_items.item_id = menu_items.id
GROUP BY menu_items.name
ORDER BY order_count DESC;