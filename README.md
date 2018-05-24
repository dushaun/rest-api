# REST API

A refresher in RESTful APIs. Being built in [Slim](https://www.slimframework.com/), a PHP framework. Inspired by [CodeCourse](https://www.codecourse.com/)

### Objective
I just wanted to freshen up some stale skills I had built up a while ago, and thought this exercise to be a great way to explore a different framework I'm used to.

### Lessons Learned
The main thing I learned was how frameworks differ slightly. I've professionally worked in [Laravel](https://laravel.com/), so it was interesting to see how Slim tackles the simple stuff.

Also, with Slim being so light weight it opened up an opportunity to pull in packages through composer and see how they work in a different environment. As I didn't want the code to get too messy with the typical [PDO](http://php.net/manual/en/book.pdo.php) database usage, I opted for a familiar package called Eloquent. Its a part of Laravel's [Illuminate](https://github.com/laravel/framework/tree/5.6/src/Illuminate) library in the framework's core.

Overall, it made me realise why Slim is such a popular framework. By providing the basics of what a framework can be can give a solid foundation to build thing off of. Sometimes having a massive framework that has anything and everything can be a bit daunting for new users, and can make it difficult to learn knowing that there is a lot to cover.

### Different Approach?
Although I had fun building this little project, coming from larger framework left an impression on everything I did. Things such as Routing, Containers, Requests, maybe even Validation that were packaged properly were missed. Sure, there are ways to implement those things in pure PHP or even pull in packages through composer. But at that point, it would be better to go for the frameworks that already have them.

### Conclusion
I enjoy playing around with Slim, will definitely be playing around with it more in the future. But I think for projects that need a little bit more core functionality, it will be best to try out a framework like [Lumen](https://lumen.laravel.com/).