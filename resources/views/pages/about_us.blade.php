@extends('layout')

@section('content')


<main>
            <div class="container-fluid">
                    <div class="row breadcrumbs">
                    <div class="col-sm-12">
                        <br>
                        <a href="/">Home</a>
                        <span class="seperator">></span>
                        <span class="current-page">About Us</span>
                    </div>
                    </div>
                    </div>
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-2">
                    <h2>About Us</h2>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-12">
                                <div id="tabs">
                                    <ul>
                                        <li><a href="#fragment-1">Wallet</a></li>
                                        <li><a href="#fragment-2">Tokens</a></li>
                                        <li><a href="#fragment-3">Bytecoin API</a></li>
                                    </ul>
                                    <div id="fragment-1">
                                            <div class="container-fluid">
                                            <div class="row">
                                        <div class="col-sm-6 slider ">
                            <img src="https://bytecoin.org/storage/web%20wallet.png" >
                                                </div>
                            <div class="col-sm-6 slider">
                            <p class="teksts5">
                          I’m here to tell you about the current development phase and deadlines. So, the current desktop software versions seem to be a bit out-of-date and contain some issues. That’s why on the 2018 roadmap we’ve said that some huge updates will happen, and it’s really the thing that the Dev team has to pay the most attention to. Stable software is key to the success of a certain project we have been developing, and we’re happy to announce that today we’re launching the 3rd Alpha build on macOS, Windows, and Linux. The previous builds were successfully tested among our secret group of community enthusiasts, most of the suggestions were implemented, so the 2nd Alpha has shown results which are quite successful. The thing is that most of the essential issues were fixed (missing transactions, long sync procedures, blockchain load error, etc.) and the Alpha version we have now seems to be quite stable, and there are only a few things to shape with the design. I’m happy to announce that everything goes according to our development plan and quite soon Bytecoin users will be able to use one of the most secure wallets ever made in the whole fintech sphere right after a few simple steps of setup. You all will be able to check the final Beta version at the 6th of February.Moreover, the new RPC wallet was also affected by the major updates, which will definitely solve the hard integration procedure of Bytecoin. The new updated daemon will, again, replace some bugs and will rapidly speed up some hard integration processes.
                          I think it won’t be a mistake if I repeat it one more time - 2018 is going to be the year of Bytecoin. The amount of effort we have all put into BCN in the last couple of months is leading us to success. So let it be your year!</p>
                             </p>
                          </div>
                                        </div>
                                            </div>
                                            </div>
                                    <div id="fragment-2">
                                            <div class="container-fluid">
                                                    <div class="row">
                                                <div class="col-sm-6 slider ">
                                    <img src="https://bytecoin.org/storage/9084065_future-world-at-artscience-museum-singapores_d213331b_m.jpg" >
                                                        </div>
                                    <div class="col-sm-6 slider">
                                    <p class="teksts5">
                                            The Bytecoin Development team is happy to announce that we’ve reached another important frontier in our yearly Roadmap and we are happy to present you with the most essential updates that you’ve been waiting for. Let us help make you familiar with the progress that we’ve been working on for past several few months.
                                  I think it won’t be a mistake if I repeat it one more time - 2018 is going to be the year of Bytecoin. The amount of effort we have all put into BCN in the last couple of months is leading us to success. So let it be your year!</p>
                                     </p>
                                  </div>
                                                </div>
                                                    </div>
                                                    </div>
                                    <div id="fragment-3">
                                        <div class="container-fluid">
                                            <div class="row">
                                        <div class="col-sm-6 slider ">
                            <img src="https://bytecoin.org/storage/api_2_1.png" >
                                                </div>
                                                <div class="col-sm-6 slider">
                                                    <p class="teksts5">
                                                    The Bytecoin Development team is happy to announce that we’ve reached another important frontier in our yearly Roadmap and we are happy to present you with the most essential updates that you’ve been waiting for. Let us help make you familiar with the progress that we’ve been working on for past several few months.
To start with, one of our main objectives has been to create/make/write a brand new API. The main difference between the old and the new API is it’s simplicity. While the old API was quite hard to work with, and as a result, also hard to integrate, the new programming interface allows anyone who would like to take Bytecoin as a basic payment approach much easier. Moreover, several modifications have made the whole software more stable and reliable than ever. The new Wiki has already been officially released, so everyone who’s willing to integrate with Bytecoin is welcome there.</p>
                                                     </p>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
</div>
        <div class="container-fluid ">
                <div class="row">
                            <h3>Contacts</h3>
                            </div>
                            </div>
                            <div class="container-fluid">
                                    <div class="row">
                                       <div class="col-xs-4">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8728.953746863928!2d24.513015299999985!3d56.841853872633465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slv!4v1520994062787" width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    <div class="cols-xs-8 kontakti" >
                                            <h2>Address:</h2>
                                            <p class="kontakti">Pils laukums 3 , Riga , LV-1050 , Latvia</p>
                                            <h2>Email:</h2>
                                            <p class="kontakti"><a href="mailto:webmaster@example.com">webmaster@example.com</a></p>
                                            <h2>Phone:</h2>
                                            <p class="kontakti">+37125668574</p>
                                    </div>
                                    </div>
                                    </div>
                                
    </main>


@endsection