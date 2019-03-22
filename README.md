# Spryker B2C Demo Shop



https://documentation.spryker.com/installation/installation-guide-b2c.htm#linux

    
    VM_PROJECT=b2c-demo-shop SPRYKER_REPOSITORY="https://github.com/spryker-shop/b2c-demo-shop.git" vagrant up



## Links

Spryker Training:
https://spryker-training.thinkific.com/users/sign_in

FE:
http://www.de.b2c-demo-shop.local

BE:
http://zed.de.b2c-demo-shop.local/


## Troubleshooting
https://documentation.spryker.com/installation/troubleshooting.htm

Connection refused [tcp://127.0.0.1:10009]
    
    sudo service redis-server-development start



# Livecycle

Yves/Plugin/Provider
via URL

Yves/Controller

getClient() > Client/Client

getFactory > Client/Factory

createStub > Client/Zed/Stub

call > Zed/Communication/Controller/Gateway

getFacade > Zed/Business/Facade

getFactory > Zed/Business/Factory

creteModel > Zerd/Business/Model/Xxxx


## Layer
Presentation Layer

Communication Layer

Business Layer

Persistence Layer

