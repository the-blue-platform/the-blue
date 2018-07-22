node {
    checkout scm

    stage('Build') {
        checkout scm
        sh 'pwd && /usr/local/bin/composer install'
        /usr/local/bin/docker.build("chariot9/the-blue-server")
    }

    stage('Test') {
        /usr/local/bin/docker.image('chariot9/the-blue-server').inside {
            sh 'cd /var/www/html && ./vendor/bin/phpunit --testsuite Unit'
        }
    }

    stage('Deploy') {
        sh 'cd /Users/trungvu/workspace/blue/the-blue-docker-config/the-blue-server && /usr/local/bin/docker-compose down'
        sh 'cd /Users/trungvu/workspace/blue/the-blue-docker-config/the-blue-server && /usr/local/bin/docker-compose up -d'
        sh 'sleep 10 && cd /Users/trungvu/workspace/blue/the-blue-docker-config/the-blue-server && /usr/local/bin/docker-compose run web php artisan migrate'
    }

    stage ('Test Feature') {
        sh 'cd /Users/trungvu/workspace/blue/the-blue-docker-config/the-blue-server && /usr/local/bin/docker-compose run web ./vendor/bin/phpunit --testsuite Feature'
    }
}
