import fabric.api as fab
import fabric.colors as clr


fab.env.roledefs['prod'] = ['lost.lu']


REMOTE_FOLDER = '/var/www/lost.lu/www/htdocs/lost2014'


@fab.task
@fab.roles('prod')
def deploy():
    print(clr.red('This needs to be run by a user with sudo access!',
                  bold=True))

    with fab.settings(warn_only=True):
        fab.local('git commit -av')

    fab.local('git push')

    fab.local('git archive -o dist.tar.gz HEAD')
    fab.put('dist.tar.gz', '/tmp')
    with fab.cd(REMOTE_FOLDER):
        fab.sudo('tar xzf /tmp/dist.tar.gz', user='www-data')
        fab.run('rm /tmp/dist.tar.gz')
    fab.local('rm dist.tar.gz')
