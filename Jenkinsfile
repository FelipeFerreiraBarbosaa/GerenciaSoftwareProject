pipeline {

    agent any

    stages {
        stage ('Build') {
            steps {
                sh '''
                     
                     composer install 
                  
                '''
            }
        }

        stage('PHPUnit Tests') {
            steps {
                catchError(buildResult: 'FAILURE', stageResult: 'FAILURE') {
                    sh '''
                       
                       dir 
                        
                        ./vendor/bin/phpunit
                            
                    '''
                }

            }
        }
    }
}