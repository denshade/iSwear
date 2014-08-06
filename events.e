begin events;
    event (a user swears an oath)
        is
            requestSpace.isPost and requestSpace.oath not empty
        uses
            requestSpace readonly;

    event (there exists an obsolete oath)
        is
            oathRepo->hasObsoleteOaths()
        uses
            nothing;
        period 1 day;
end events;



on  (a user swears an oath)
    trigger
        oathRepo->storeOath
    uses
        requestSpace readonly;


on (there exists an obsolete oath)
    trigger
        oathRepo->removeObsoleteOaths