so far i achieved almost everything what we required at admin end, we can generate multiple number off randomly coupons code with combination of 4 alphanumeric words, after creating that i have shown a table which shows us the details about the coupon codes which we created (coupon code , expiry , status), also in that table we are handling individual deletion of the coupon if we want search functionality i am handling with data tables, for bulk deletion i crate a filteration form which can be open on button click and hide too by clicking the same button, at that form we can select date nd then click delete by this we are deleting all coupon code having that specific expiry date.
for frontend i create a custom template and use the deault post type of wordpress in that post i am creating videos as a post type and place their embeded code in html tag block also i set their feature images too.
At template i get all the post from that post type and show the feature image with button name unlocked if they are unlocked by clicking that button we open a modal which require coupon to unlock by adding coupon and submit we unlock te video after getting unlocked it gets the embeded code from post and shows that instead of feature image.
after submitting code we also checking if code is existing and also isnt expire, we are also checking if the code is already used in video , if all these condition gets false then we store coupon code and id of the specific video post in db, at admin end i have also set which video is relevent to which code.
the task still pending are setting of ADMN code for admin to unlock videos,
As an admin, I should see a report of failed coupon code validations with two categories: not found & already used
also i wasnt able to set any specific styling for that
