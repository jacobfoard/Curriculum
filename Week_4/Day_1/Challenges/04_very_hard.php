<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Red Ventures has partnered with the cable provider "Camcost" and will market and sell
     * bundles of their TV and internet packages.
     *
     * Camcost offers three TV packages:
     * "Budget" for $19.99, "Regular" for $39.99 and "Couch Potato" for $79.99.
     *
     * The "Couch Potato" package is only available in Utah and Oregon.
     *
     * Camcost offers two internet packages: "SlowNet" and "FastNet". However, the price varies depending on
     * the customer's location.
     * For customers living in North or South Carolina, "SlowNet" is $29.99 and "FastNet" is $59.99.
     * For customers anywhere else in the US, "SlowNet" is $24.99 and "FastNet" is $54.99.
     *
     * A "bundle" is considered to be the combination of one internet package and one TV package.
     * For example, "Budget + SlowNet" is a bundle combining the "Budget" TV package and the "SlowNet" internet package.
     * "Couch Potato + FastNet" is a bundle combining the "Couch Potato" TV package and the "FastNet" internet package.
     *
     * Create a class named "CamcostPricing" with a the public function: "getBundlesByZip".
     *
     * "getBundlesByZip" should take a customer's zip code and return all the possible bundles that the customer
     * is eligible for, along with the cost of each bundle.
     *
     * For example, for a customer with the zip "28277" the function should return an array that looks like:
     *
     * array(
     *     "Budget + SlowNet" => 49.98,
     *     "Budget + FastNet" => 79.98,
     *     "Regular + SlowNet" => 69.98,
     *     "Regular + FastNet" => 99.98
     * )
     *
     * This site will help you to know which zip codes belong to which states:
     * @see https://smartystreets.com/articles/zip-codes-101
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////

    class CamcostPricing {
        
        public function getBundlesByZip($zip){
            if(is_int($zip)){
                $zip = strval($zip);
                if(strpos($zip, '27') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '28') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '29') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '97') === 0) {
                     return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98,
                            "Potato + SlowNet" => 104.98,
                            "Potato + FastNet" => 134.99
                            );
                }
                if(strpos($zip, '84') === 0) {
                     return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98,
                            "Potato + SlowNet" => 104.98,
                            "Potato + FastNet" => 134.99
                            );
                }
                else{
                    return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98
                            );
                }
            }
            else{
                if(strpos($zip, '27') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '28') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '29') === 0){
                    return array(
                            "Budget + SlowNet" => 49.98,
                            "Budget + FastNet" => 79.98,
                            "Regular + SlowNet" => 69.98,
                            "Regular + FastNet" => 99.98
                            );
                }
                if(strpos($zip, '97') === 0) {
                     return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98,
                            "Potato + SlowNet" => 104.98,
                            "Potato + FastNet" => 134.99
                            );
                }
                if(strpos($zip, '84') === 0) {
                     return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98,
                            "Potato + SlowNet" => 104.98,
                            "Potato + FastNet" => 134.99
                            );
                }
                else{
                    return array(
                            "Budget + SlowNet" => 44.98,
                            "Budget + FastNet" => 74.98,
                            "Regular + SlowNet" => 64.98,
                            "Regular + FastNet" => 94.98
                            );
                }
            }
        }
    }

    $pricing = new CamcostPricing;
    
    function showBundles($bundles) {
        foreach ($bundles as $bundleName=>$bundleCost) {
            echo "<p>$bundleName: \$$bundleCost</p>";
        }
    }
    
    $zip = '28277';
    $bundles = $pricing->getBundlesByZip($zip);
    echo "<h3>Camcost Bundles for customers in $zip</h3>";
    showBundles($bundles);

    $zip = '84101';
    $bundles = $pricing->getBundlesByZip($zip);
    echo "<h3>Camcost Bundles for customers in $zip</h3>";
    showBundles($bundles);
    
    $zip = '97101';
    $bundles = $pricing->getBundlesByZip($zip);
    echo "<h3>Camcost Bundles for customers in $zip</h3>";
    showBundles($bundles);

    ?>

</p>

</body>
</html>