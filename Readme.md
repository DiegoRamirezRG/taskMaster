# Docker PHP, MySQL and Apache2
In order to use this prefabricated docker LAMP repo, you need to follow this instructions:

## Requirements
1. Docker installed

## Instructions
                
1. Clone the repository using\
	`git clone https://github.com/Diego-Testing/Docker_LAMP.git`
2. Once the clone is done, go to the `src` folder using\
	`cd .\src\`
3. Once inside, we will install the required packages using composer as follows\
	`composer install`
4. Now we will create the `.env` file based on the `.env.example` file located in the same folder\
5. To finally run the containers we need to go to the root folder and use the following command\
	`docker-composer up --build`
6. To stop its execution it is necessary from the root folder to use the following command\
	`docker-composer down -v`
7. Ready! now you can start building your php app inside the `src` folder
