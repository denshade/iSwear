event (a user swears an oath)
    is
        requestSpace.isPost and requestSpace.oath not empty
    uses
        requestSpace readonly;




on  (a user swears an oath)
    trigger
        OathStore->storeOath
    uses
        requestSpace readonly;
