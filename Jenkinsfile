pipeline {

    agent any

    stages {
        

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