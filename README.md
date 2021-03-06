# exam-preparation
You want to prepare for any exams for Full Stack Web jobs, primarily on PHP. You want to gather all the essentials concepts you have learned so far to a single place. 

# Concepts
> You want to cover the broad categories of major concepts on full stack web dev, without using any framework, or any major libraries. You can however, use libraries for development purposes, e.g. phpunit, and codeception. 
Each concept must have tests (acceptance/unit) as needed, you don't use functional tests since you're not using any frameworks.

- [HoneyPot](https://github.com/rdok/exam-preparation/blob/master/app/Controllers/HoneyPotController.php#L20) - [Tests](https://github.com/rdok/exam-preparation/blob/master/tests/acceptance/HoneyPotCest.php#L41) | a computer security mechanism set to detect, deflect, or, in some manner, counteract attempts at unauthorized use of information systems
- [Router controller](https://github.com/rdok/exam-preparation/blob/master/app/Http/Router.php#L11)
- [Viewer](https://github.com/rdok/exam-preparation/blob/master/app/Controllers/BaseController.php#L22)
- [Depedency Injection](https://github.com/rdok/exam-preparation/blob/master/app/IoC.php) && [Composition Root](https://github.com/rdok/exam-preparation/blob/master/app/bootstrap.php#L15)
- [Tests](https://github.com/rdok/exam-preparation/tree/master/tests) | Based on Full-stack testing PHP framework http://codeception.com
- [Database migrations](https://github.com/rdok/exam-preparation/blob/master/database/migrations/mysql/CreateUsersTable.php) | Track database structure on git. 
- [Use singleton database connection](https://github.com/rdok/exam-preparation/blob/master/app/Kernel/DbManager.php)
- [Use Single Responsibility Principle](https://github.com/rdok/exam-preparation/blob/master/app/Controllers/HoneyPotController.php#L41) | A class should have only one reason to change. Use IoC to [inject dependency](https://github.com/rdok/exam-preparation/blob/master/app/bootstrap.php#L38), on this interface.
- [Flash Notifications](https://github.com/rdok/exam-preparation/blob/master/app/Notifications/Flash.php) | Session-Based Notifications

## Dev
- Follow [this](http://codeception.com/docs/modules/WebDriver#phantomjs) guidelines to set up PhantomJS headless testing server.
- http://codeception.com/quickstart


## Sources
- Laracasts
