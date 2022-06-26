pipeline {

    agent any

    stages {
        

        stage('PHPUnit Tests') {
            steps {
                catchError(buildResult: 'FAILURE', stageResult: 'FAILURE') {
                    sh '''
                       
                        
                        
                        ./vendor/bin/phpunit
                            
                    '''
                }

            }
        }
    }
}