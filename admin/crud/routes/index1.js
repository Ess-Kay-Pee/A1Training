module.exports = {
    getInterviewHomePage: (req, res) => {
        let query = "SELECT * FROM `players` ORDER BY id ASC"; // query database to get all the players

        // execute query
        db.query(query, (err, result) => {
            if (err) {
                res.redirect('/');
            }
            res.render('index1.ejs', {
                title: "Welcome to Socka | View Players"
                ,players: result
            });
        });
    },
};