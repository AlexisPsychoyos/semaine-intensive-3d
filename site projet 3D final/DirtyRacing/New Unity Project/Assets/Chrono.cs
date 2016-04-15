using UnityEngine;
/*using UnityEngine.UI;*/
using System.Collections;

public class Chrono : MonoBehaviour
{

	public GameObject final;
	/*public Text chronotext;*/

	bool begin = false;
	float timeRemaining = 0.0f;

    void Update()
    {
		if (begin) {
			timeRemaining += Time.deltaTime;
			/*chronotext.text = "chrono = "+timeRemaining;*/
		}
    }

    void OnGUI()
    {
        GUI.Label(new Rect(100, 100, 200, 100),
         "Time : " + timeRemaining.ToString("####0.00"));
    }
	public void my_start()
	{
		begin = true;
	}

	void OnTriggerEnter(Collider Other){
		if (Other.tag == "fin") {
			Time.timeScale = 0;
		}
	}
}
